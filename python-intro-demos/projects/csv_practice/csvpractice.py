import csv

def skip_lines(num_lines_to_skip, file_object):
    """Skip a given number of lines in the file."""
    for _ in range(num_lines_to_skip):
        file_object.readline()

# Open CSV file with specific encoding
with open('bb.csv', mode='r', encoding='iso-8859-1') as file:
    skip_lines(4, file)

    reader = csv.DictReader(file)
    population_data = {}

    for row in reader:
        region = row['Region']
        age_range = row['Range']
        people_count = row['All people']

        if len(region.strip()) < 2:
            break

        if region not in population_data:
            population_data[region] = {}

        population_data[region][age_range] = people_count

def get_regions():
    """Return a list of all available region names."""
    return list(population_data.keys())

def total_population(region_name='', target_age=0):
    """
    Calculate total population in a region (excluding 'All people' row).
    Optionally, use age logic to fetch specific age group (commented for now).
    """
    if region_name not in population_data:
        return 0

    total = 0
    for age_group, count in population_data[region_name].items():
        if age_group == 'All people':
            continue
        total += int(count.replace(',', ''))

    print(f"Total (excluding 'All people') in {region_name}: {total}")
    print(f"Reported total (All people): {population_data[region_name]['All people']}")

    # Age-specific logic (can be enabled if needed):
    # if target_age >= 95:
    #     return population_data[region_name]['95 and over']
    # elif 90 <= target_age <= 94:
    #     return population_data[region_name]['90 to 94']
    # elif 85 <= target_age <= 89:
    #     return population_data[region_name]['85 to 89']
    # elif target_age <= 0:
    #     return population_data[region_name]['Under 1']

# Example call
total_population('Scotland', 50)
